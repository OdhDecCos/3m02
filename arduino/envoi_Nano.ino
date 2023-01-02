struct donneesMesureesDef
{float voltageA; int16_t intValueA; float voltageB; uint8_t byteA; float voltageC;}__attribute__((packed));;
donneesMesureesDef donneesAtransmettre;

unsigned long loopTime = 500;     // Toutes lkes 500 milliSecondes
unsigned long loopTimeR = millis();

void setup()
{
      Serial.begin(9600);
      //Serial1.begin(115200);
      
      donneesAtransmettre.voltageA = 12.55;
      donneesAtransmettre.voltageB = 2.03;
      donneesAtransmettre.voltageC = 3750.20;
}

void loop()
{
      if (millis()-loopTimeR >= loopTime)
      {
            Serial.write((byte *)&donneesAtransmettre, sizeof donneesAtransmettre); // Serial
            
            donneesAtransmettre.voltageA += 0.25;     // Pour faire "bouger" les valeurs
            donneesAtransmettre.voltageB += 1.1;
            donneesAtransmettre.voltageC += 110.02;
            donneesAtransmettre.intValueA ++;
            donneesAtransmettre.byteA ++;
            
            loopTimeR = millis();
      }
}