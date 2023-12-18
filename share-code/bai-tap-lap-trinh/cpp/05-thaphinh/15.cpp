#include <iostream>

using namespace std;
int main()
{
    /*              i
    ===1===         1   3
    ==222==         2   2
    =33333=         3   33
    4444444
    */
    int number        = 1;
    const int HEIGHT  = 4;
    for (int i = number; i <= HEIGHT; i++)
    {
      string charater    = "";
      string number      = "";
      string recode      = "";
      string shape       = "";

      for (int c = 1; c <= HEIGHT - i ; c++)
      {
           charater += "=";
      }
      for (int j = 2; j <= i; j++)
        {
            number += to_string(i);
        }
      recode = charater + number + to_string(i) + number + charater;
      shape += recode;
      cout << shape << "\n";  
    }
}