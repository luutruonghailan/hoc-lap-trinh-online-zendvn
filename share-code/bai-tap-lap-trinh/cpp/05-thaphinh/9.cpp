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
    1+
    2xx
    3+++
    */
    int number = 1;
    const int HEIGHT = 3;
    string shape = "";
    for (int i = number; i <= HEIGHT; i++)
    {
        string character = "+";

        if (i % 2 == 0)
        {
            character = "x";
        }

        string record = to_string(i) + myRepeat(character, i);
        shape += record + "\n";
    }
    cout << shape << "\n";
}