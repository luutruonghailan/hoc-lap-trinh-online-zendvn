#include <iostream>
using namespace std;
int main()
{
    /*
    1+
    2xx
    3+++
    */
    int number = 1;
    while (number <= 3)
    {
        string charater      = "";
        string shape         = "";
        string record        = "";
        if (number % 2 == 0)
        {
            for (int i = 1; i <= number; i++)
            {
                charater += "x";
            }
        }
        else
        {
            for (int i = 1; i <= number; i++)
            {
                charater += "+";
            }
        }
        
        record = to_string(number) + charater;
        shape += record;
        cout << shape << "\n";
        number++;
    }
}