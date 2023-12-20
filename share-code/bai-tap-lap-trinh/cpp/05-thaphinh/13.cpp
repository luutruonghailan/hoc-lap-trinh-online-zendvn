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
    +++++
    =++++
    ==+++
    ===++
    ====+
    */

    int number = 1;
    const int HEIGHT = 5;
    string shape = "";
    for (int i = HEIGHT; i >= number; i--)
    {
        string charater = myRepeat("=", HEIGHT - i);
        string mark = myRepeat("+", i);
        string record = charater + mark;
        shape += record + "\n";
    }
    cout << shape << "\n";
}