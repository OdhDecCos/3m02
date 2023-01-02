#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define SCREEN_WIDTH 128 // OLED display width, in pixels
#define SCREEN_HEIGHT 32 // OLED display height, in pixels

// Declaration for an SSD1306 display connected to I2C (SDA, SCL pins)

#define OLED_RESET     -1 // Reset pin # (or -1 if sharing Arduino reset pin)
#define SCREEN_ADDRESS 0x3C ///< See datasheet for Address;k 0x3D for 128x64, 0x3C for 128x32
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, OLED_RESET);

int incomingByte = 0;

/* Pour afficher les courbes cos et sin
int hCenter = 32;                               // horizontal center of 64 / 2 = 32
int Radius = 30;                                // radius of circle
const float Pi = 3.14159265359;                 // Pi
*/

void setup() {
  pinMode(BUILTIN_LED, OUTPUT);     // Initialize the LED_BUILTIN pin as an output
  Serial.begin(19200);
  // SSD1306_SWITCHCAPVCC = generate display voltage from 3.3V internally
  if(!display.begin(SSD1306_SWITCHCAPVCC, SCREEN_ADDRESS)) {
    Serial.println(F("SSD1306 allocation failed"));
    for(;;); // Don't proceed, loop forever
  }

}

// the loop function runs over and over again forever
void loop() {
  digitalWrite(BUILTIN_LED, LOW);   // Turn the LED on (Note that LOW is the voltage level
  // but actually the LED is on; this is because
  // it is active low on the ESP-01)
  delay(1000);                      // Wait for a second
  Serial.printf("Flash real id:   %08X\n", ESP.getFlashChipId());
  digitalWrite(BUILTIN_LED, HIGH);  // Turn the LED off by making the voltage HIGH
  delay(200);                      // Wait for two seconds (to demonstrate the active low LED)

  testdrawstyles();    // Draw 'stylized' characters
   if (Serial.available() > 0) {
    // read the incoming byte:
    incomingByte = Serial.read();

    // prints the received data
    Serial.print("I received: ");
    Serial.print(char(incomingByte));

/*
      display.clearDisplay();
//  display.drawRect(0, 0, 120, 32, WHITE);                      // draws border
  display.drawLine(0,16,128,16,WHITE);                         // draws grid horizontal center
//  display.drawLine(30,0,30,64,WHITE);                          // draws grid vertical first
  display.drawLine(31,0,31,32,WHITE);                          // draws grid vertical second
//  display.drawLine(90,0,90,64,WHITE);     
  for (int x = 0; x < SCREEN_WIDTH; x++) {
    float y1 = (sin(x / 10.0) + 1) * SCREEN_HEIGHT / 2;
    float y2 = (cos(x / 10.0) + 1) * SCREEN_HEIGHT / 2;
    display.drawPixel(x, y1, WHITE);
    display.drawPixel(x, y2, WHITE);
    display.display();
*/
  }
}

void testdrawstyles(void) {
  display.clearDisplay();
  display.setTextSize(1);             // Normal 1:1 pixel scale
  display.setTextColor(SSD1306_WHITE);        // Draw white text
  display.setCursor(0,0);             // Start at top-left corner
  display.println(F("Sudriabotik"));
  display.setCursor(0,10);             // Start at top-left corner
  display.println(F("250 Points"));
  display.setCursor(0,20);        
  display.println(F("RS232:"));
  display.setCursor(40,20);        
  display.println(char(incomingByte));
  display.display();
}
