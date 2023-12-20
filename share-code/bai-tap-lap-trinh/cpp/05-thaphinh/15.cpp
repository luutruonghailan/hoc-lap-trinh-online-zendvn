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
    /*              i
    ===1===         1   3
    ==222==         2   2
    =33333=         3   33
    4444444
    */
    int number = 1;
    const int HEIGHT = 4;
    string shape = "";
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater = myRepeat("=", HEIGHT - i);
        string number = myRepeat(to_string(i), i * 2 - 1);
        string record = charater + number + charater;
        shape += record + "\n";
    }
    cout << shape << "\n";
}