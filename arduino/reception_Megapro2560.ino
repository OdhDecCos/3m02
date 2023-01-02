struct donneesMesureesDef
{float voltageA; int16_t intValueA; float voltageB; uint8_t byteA; float voltageC;}__attribute__((packed));;
donneesMesureesDef donneesAtransmettre;

bool nouvellesDonnes = false;

void setup()
{
      Serial.begin(115200);
      Serial1.begin(9600);
}

void loop()
{
      if (Serial1.available())
      {
            Serial1.readBytes((byte*)&donneesAtransmettre, sizeof donneesAtransmettre);
            nouvellesDonnes = true;
      }
      
      if (nouvellesDonnes)
      {
            Serial.print(donneesAtransmettre.voltageA); Serial.print("\t");
            Serial.print(donneesAtransmettre.voltageB); Serial.print("\t");
            Serial.print(donneesAtransmettre.voltageC); Serial.print("\t");
            Serial.print(donneesAtransmettre.intValueA); Serial.print("\t");
            Serial.print(donneesAtransmettre.byteA); Serial.print("\t");
            Serial.println("");
            
            nouvellesDonnes = false;
      }
}