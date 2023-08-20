const int inPin = 7;

int buttonState = 0;

void setup()
{
  pinMode(inPin, INPUT);
  Serial.begin(9600);
}

void loop()
{
  buttonState = digitalRead(inPin);
  Serial.print(buttonState);
}