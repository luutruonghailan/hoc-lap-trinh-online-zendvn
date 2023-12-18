#include <iostream>

using namespace std;
int main()
{
    /*
    ====1====
    ===212===
    ==32123==
    =4321234=
    543212345
    */
    int number          = 1;
    const int HEIGHT    = 5;
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater    = "";
        string number      = "";
        string record      = "";
        string shape       = "";
        string left        = "";
        string right       = "";
        for (int c = 1; c <= HEIGHT - i; c++)
        {
            charater += "=" ;
        }
        for (int l = i; l > 1; l--)
        {
            left += to_string(l) ;
        }
        for (int r = 2; r <= i; r++)
        {
            right += to_string(r) ;
        }

        record = charater + left + "1" + right + charater;
        shape += record;
        cout << shape << "\n";
    }
}