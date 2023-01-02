struct donneesMesureesDef
{float voltageA; int16_t intValueA; float voltageB; uint8_t byteA; float voltageC;}__attribute__((packed));;
donneesMesureesDef donneesAtransmettre;

bool nouvellesDonnes = false;

void setup()
{
      Serial.begin(9600);
      //Serial2.begin(115200);
}

void loop()
{
      if (Serial.available()) //2
      {
            Serial.readBytes((byte*)&donneesAtransmettre, sizeof donneesAtransmettre); //2
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