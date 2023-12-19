#include <iostream>

using namespace std;

string myRepeat(string character, int length)
{
  string record = "";
  for (int i = 1; i <= length; i++)
  {
    record += character;
  }
  return record;
}

int main()
{
    /*
    +
    + +
    + + +
    */
    int number = 1;
    string shape = "";
    const int HEIGHT = 5;

    for (int i = number; i <= HEIGHT; i++)
    {
        shape += myRepeat("+", i) + "\n";
    }
    cout << shape << "\n";
}