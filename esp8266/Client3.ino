
#include <SPI.h>
#include <ESP8266WiFi.h>

//byte ledPin = 2;
char ssid[] = "TP-LINK_E974";           // SSID of your home WiFi
char pass[] = "sudriabotik3m02";            // password of your home WiFi

unsigned long askTimer = 0;

IPAddress server(192,168,0,100);       // the fix IP address of the server
WiFiClient client;

void setup() {
  pinMode(LED_BUILTIN, OUTPUT);
  Serial.begin(115200);               // only for debug
  WiFi.begin(ssid, pass);             // connects to the WiFi router
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  Serial.println("");
  Serial.println("Connected to routeur");
  Serial.print("Status: "); Serial.println(WiFi.status());    // Network parameters
  Serial.print("IP: ");     Serial.println(WiFi.localIP());
  Serial.print("Subnet: "); Serial.println(WiFi.subnetMask());
  Serial.print("Gateway: "); Serial.println(WiFi.gatewayIP());
  Serial.print("SSID: "); Serial.println(WiFi.SSID());
/*  Serial.print("Signal: "); Serial.println(WiFi.RSSI()); */
  pinMode(LED_BUILTIN, OUTPUT);
}

void loop () {
  client.connect(server, 80);   // Connection to the server
  digitalWrite(LED_BUILTIN, LOW);    // to show the communication only (inverted logic)
  Serial.println(".");
  client.println("Bonjour server, est ce que tu dors?\r");  // sends the message to the server
  String answer = client.readStringUntil('\r');   // receives the answer from the sever
  Serial.println("Du server: " + answer);
  client.flush();
  digitalWrite(LED_BUILTIN, HIGH);
  delay(2000);                  // client will trigger the communication after two seconds
}
