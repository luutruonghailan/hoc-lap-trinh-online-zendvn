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
    const int HEIGHT = 3;
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater = "";
        string shape = "";
        string record = "";
        if (i % 2 == 0)
        {
            for (int j = 1; j <= i; j++)
                charater += "x";
        }
        else
        {
            for (int j = 1; j <= i; j++)
                charater += "+";
        }
        record = to_string(i) + charater;
        shape += record;
        cout << shape << "\n";
    }
}