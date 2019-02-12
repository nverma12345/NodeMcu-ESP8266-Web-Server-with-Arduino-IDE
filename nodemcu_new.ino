/**
 * BasicHTTPClient.ino
 *
 *  Created on: 24.05.2015
 *
 */

#include <Arduino.h>

#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>

#include <ESP8266HTTPClient.h>

#define USE_SERIAL Serial

ESP8266WiFiMulti WiFiMulti;


//DEFINE ALL GLOBAL VAARIABLES HERE
String payload;

int l1=D0;
int l2=D1;
int l3=D2;
int l4=D3;


//keywords for EmaticX
const char keyword_html_start_b[] = "b>" ;
const char keyword_html_end_b[] = "</b>";


void cmd_read();
void setup() {

    USE_SERIAL.begin(115200);

    USE_SERIAL.println();
    USE_SERIAL.println();
    USE_SERIAL.println();

    for(uint8_t t = 4; t > 0; t--) {
        USE_SERIAL.printf("[SETUP] WAIT %d...\n", t);
        USE_SERIAL.flush();                          // Waits for the transmission of outgoing serial data to complete.
                                                     // clears the buffer once all outgoing characters have been sent.
        delay(1000);
    }

pinMode(l1, OUTPUT);
pinMode(l2, OUTPUT);
pinMode(l3, OUTPUT);
pinMode(l4, OUTPUT);

    WiFiMulti.addAP("asus11", "youtube12");

}

void loop() {
    // wait for WiFi connection
    if((WiFiMulti.run() == WL_CONNECTED)) {                  //WL_CONNECTED: assigned when connected to a WiFi network  //WiFi.status()
                                                             // WL_DISCONNECTED: assigned when disconnected from a network etc..

        HTTPClient http;

        USE_SERIAL.print("[HTTP] begin...\n");
        // configure traged server and url
        http.begin("https://nishantiitd.000webhostapp.com/file_to_read.html"); //HTTP

        USE_SERIAL.print("[HTTP] GET...\n");
        // start connection and send HTTP header
        int httpCode = http.GET();

        // httpCode will be negative on error
        if(httpCode > 0) {
            // HTTP header has been send and Server response header has been handled
            USE_SERIAL.printf("[HTTP] GET... code: %d\n", httpCode);

            // file found at server
            if(httpCode == HTTP_CODE_OK) {                  // For response code 200, we have the constant as HTTP_CODE_OK. & 404,is the error( Page not found )
                 payload = http.getString();               //To read the response message, we call http.getString(). This will return a string object.
                                                           // http request -- GET(),POST()
                USE_SERIAL.println(payload);
            }
        } else {
            USE_SERIAL.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
        }

        http.end();
    }
cmd_read();
    delay(1000);
}

void cmd_read()
{
 
      
     if(payload.indexOf("A1") >0)          // Locates a character or String within another String. By default, 
                                           //searches from the beginning of the String, but can also start from a given index, 
                                           //allowing for the locating of all instances of the character or String
      {Serial.println("l1one");
      digitalWrite(l1, HIGH);}
      
     if(payload.indexOf("B1") >0) 
      {Serial.println("l2one");
      digitalWrite(l2, HIGH);}
      
     if(payload.indexOf("C1") >0) 
      {Serial.println("l3one");
      digitalWrite(l3, HIGH);}
      
     if(payload.indexOf("D1") >0) 
      {Serial.println("l4one");
      digitalWrite(l4, HIGH);}
      
     if(payload.indexOf("A0") >0) 
      {Serial.println("l1off");
      digitalWrite(l1, LOW);}
      
     if(payload.indexOf("B0") >0) 
      {Serial.println("l2off");
      digitalWrite(l2, LOW);}
      
     if(payload.indexOf("C0") >0) 
      {Serial.println("l3off");
      digitalWrite(l3, LOW);}
      
     if(payload.indexOf("D0") >0) 
      {Serial.println("l4off");
      digitalWrite(l4, LOW);}
      
  
      /*  if(strcmp(payload, "keyword_html_start_b[]")  == 0){
          Serial.println("Command received: LEDON");
      //    Esplora.writeRGB(255, 255, 255);
        }else if (strcmp(payload, "0000")  == 0) {
          Serial.println("Command received: LEDOFF");
        //  Esplora.writeRGB(0, 0, 0);
        }else{
          Serial.println("Command received: unknown!");
        }
        
      }else{
        if(cmdIndex++ >= MAX_CMD_LENGTH){
          cmdIndex = 0;
        }*/
      
    }
