#include <iostream>

using namespace std;
int main()
{
    /*
    ===1===
    ==121==
    =12321=
    1234321
    */
    int number = 1;
    const int HEIGHT = 5;
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater    = "";
        string number      = "";
        string recode      = "";
        string shape       = "";
        string left        = "";
        string right       = "";
        for (int c = 1; c <= HEIGHT - i; c++)
        {
            charater += "=" ;
        }
        for (int l = 1; l < i; l++)
        {
            left += to_string(l);
        }

        for (int r = i; r >= 1; r--)
        {
            right += to_string(r);
        }
        recode = charater + left + right + charater;
        shape += recode;
        cout << shape << "\n";
    }
}