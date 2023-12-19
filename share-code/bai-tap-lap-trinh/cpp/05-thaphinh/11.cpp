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
    ====+
    ===++
    ==+++
    =++++
    +++++
    */
    const int HEIGHT = 5;
    int number = 1;
    string shape = "";

    for (int i = HEIGHT; i >= number; i--)
    {
        string charater = myRepeat("=", i - 1);
        string mark = myRepeat("+", HEIGHT - i + 1);
        string record = charater + mark;
        shape += record + "\n";
    }
    cout << shape << "\n";
}