#include <SPI.h>
#include <ESP8266WiFi.h>


char ssid[] = "TP-LINK_E974";               // SSID of your home WiFi
char pass[] = "sudriabotik3m02";               // password of your home WiFi
WiFiServer server(80);                    

IPAddress ip(192, 168, 0, 100);            // IP address of the server
IPAddress gateway(192,168,0,254);           // gateway of your network
IPAddress subnet(255,255,255,0);          // subnet mask of your network

void setup() {
  Serial.begin(115200);                   // only for debug
  WiFi.config(ip, gateway, subnet);       // forces to use the fix IP
  WiFi.begin(ssid, pass);                 // connects to the WiFi router
  while (WiFi.status() != WL_CONNECTED) {
    Serial.println(".");
    delay(500);
  }
  server.begin();
  Serial.println("Serveur demarrer !");// starts the server
  Serial.println("Connected au routeur :");
  Serial.print("Status: "); Serial.println(WiFi.status());  // some parameters from the network
  Serial.print("IP: ");     Serial.println(WiFi.localIP());
  Serial.print("Subnet: "); Serial.println(WiFi.subnetMask());
  Serial.print("Gateway: "); Serial.println(WiFi.gatewayIP());
  Serial.print("SSID: "); Serial.println(WiFi.SSID());
/*  Serial.print("Signal: "); Serial.println(WiFi.RSSI());
  Serial.print("Networks: "); Serial.println(WiFi.scanNetworks()); */ 
  pinMode(LED_BUILTIN, OUTPUT);
}


void loop () {
  WiFiClient client = server.available();
  if (client) {
    if (client.connected()) {
      digitalWrite(LED_BUILTIN, LOW);  // to show the communication only (inverted logic)
      Serial.println(".");
      String request = client.readStringUntil('\r');    // receives the message from the client
      Serial.print("Du client: "); Serial.println(request);
      client.flush();
      client.println("Bonjour client! Non, je suis en écoute.\r"); // sends the answer to the client
      digitalWrite(LED_BUILTIN, HIGH);
    }
    client.stop();                // tarminates the connection with the client
  }
}
