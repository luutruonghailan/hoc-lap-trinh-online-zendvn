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

string createListNumber(int start, int end)
{
    string record = "";
    for (int i = start; i <= end; i++)
    {
        record += to_string(i);
    }
    return record;
}

string createListNumberReverse(int end, int start)
{
    string record = "";
    for (int i = end; i >= start; i--)
    {
        record += to_string(i);
    }
    return record;
}

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
    string shape = "";
    for (int i = number; i <= HEIGHT; i++)
    {
        string charater = myRepeat("=", HEIGHT - i);
        string left = createListNumber(1, i - 1);
        string right = createListNumberReverse(i, 1);
        string record = charater + left + right + charater;
        shape += record + "\n";
    }
    cout << shape << "\n";
}