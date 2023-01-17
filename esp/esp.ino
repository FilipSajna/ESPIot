#include <DHT.h>
#include <WiFiClientSecure.h>
#include <WiFi.h>
#include <HTTPClient.h>
#include <Wire.h>    // I2C library
#include "ccs811.h"  // CCS811 library

#define BUZZZER_PIN  15
#define RED_PIN 18
#define GREEN_PIN 19
DHT dht(4, DHT11);
CCS811 ccs811(23); // nWAKE on D23

const char* ssid = "iPhone Najľepši";
const char* pass = "ESPIoT__55";
WiFiClient wifi;

int poc=0;
float co2, tvoc;

void setup() {
  Serial.begin(9600);
  dht.begin();
  Wire.begin();
  WiFi.begin(ssid, pass);
  Serial.println("Connecting");
  pinMode(RED_PIN, OUTPUT);
  pinMode(GREEN_PIN, OUTPUT);

  while (WiFi.status() != WL_CONNECTED)
  {
    delay (1000);
    Serial.print(".");
  }
  Serial.println("Connected");

  // Enable CCS811
  bool ok = ccs811.begin();
  if ( !ok ) Serial.println("setup: CCS811 begin FAILED");

  //CC811 start
  ok = ccs811.start(CCS811_MODE_1SEC);
  if ( !ok ) Serial.println("setup: CCS811 start FAILED");
}

void loop() {
   String payload="";
   String temperature = "0";
   String humidity = "0";

   String hodnota = "52";
   String hodnota2 = "35";
   String hodnota3 = "85";
   String hodnota4 = "35";

  //tato cast kodu sluzi len na spojazdnenie / rozhybanie Azure-u
  if (WiFi.status() == WL_CONNECTED) // ak je ESP pripojene k wifi
  {
    HTTPClient http; // vytvorenie HTTP clienta
    String server_name = "https://espwebboss.azurewebsites.net/"; // nazov webu a web stranky, ktoru chceme nacitat
    http.begin(server_name.c_str());
    int httpCode = http.GET(); // http code

    if (httpCode>0) 
      payload= http.getString();
      Serial.print("HTTP Response code: ");
      Serial.println(httpCode); // vypisanie http code do Serial monitoru (200 - OK)
      //Serial.println(payload); // vypisanie celej html stranky, ktora sa na tejto url nachadza (zobrazene v serial monitore)

    http.end();
  }

  // Read
  uint16_t eco2, etvoc, errstat, raw;
  ccs811.read(&eco2, &etvoc, &errstat, &raw);

  if ( errstat == CCS811_ERRSTAT_OK )
  {
    co2 = eco2;
    tvoc = etvoc;
 
    Serial.print("CCS811: ");
    Serial.print("eco2=");
    Serial.print(co2);
    Serial.print(" ppm  ");
 
    Serial.print("etvoc=");
    Serial.print(tvoc);
    Serial.print(" ppb  ");
    Serial.println();
  }
  else if ( errstat == CCS811_ERRSTAT_OK_NODATA )
  {
    Serial.println("CCS811: waiting for (new) data");
  } else if ( errstat & CCS811_ERRSTAT_I2CFAIL )
  {
    Serial.println("CCS811: I2C error");
  }
  else
  {
    Serial.print("CCS811: errstat=");
    Serial.print(errstat, HEX);
    Serial.print("=");
    Serial.println( ccs811.errstat_str(errstat) );
  }

  
  //temp & hum
  float hum = dht.readHumidity();
  float temp = dht.readTemperature();
  if (isnan(temp) || isnan(hum)){
    Serial.println("Failed to read value");
  }
  else{
    if(temp < 49 || hum < 50)  //buz buz 
    {
      tone(BUZZZER_PIN, 100, 4);
      digitalWrite(RED_PIN, HIGH);
    }
    else
    {
      digitalWrite(GREEN_PIN, HIGH);
    }
    char string[40];
    sprintf(string, "Humidity: %.2f | Temperature: %.2f", hum, temp);
    Serial.println(string);
  }
  delay(2000);

  //zapis
  if(WiFi.status() == WL_CONNECTED)
  {
    HTTPClient http;
    String server_name = "https://espwebboss.azurewebsites.net/zadanie.php/?";

    server_name += "temp="; // nazov premennej na webe
    server_name += hodnota; // hodnota premmenej
    server_name += "&hum="; // nazov premennej na webe
    server_name += hodnota2; // hodnota premennej
    server_name += "&co2="; // nazov premennej na webe
    server_name += hodnota3; // hodnota premmenej
    server_name += "&tvoc="; // nazov premennej na webe
    server_name += hodnota4; // hodnota premennej
    http.begin(server_name.c_str());
    int httpCode = http.GET(); // http code
    
    if (httpCode>0) 
    {
      payload= http.getString();
      Serial.print("HTTP Response code: ");
      Serial.println(httpCode); // vypisanie http code do Serial monitoru (200 - OK)
    }
    http.end();
  }
}