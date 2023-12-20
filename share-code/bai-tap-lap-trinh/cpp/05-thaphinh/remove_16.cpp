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
    ====1====
    ===212===
    ==32123==
    =4321234=
    543212345
    */
    int number = 1;
    const int HEIGHT = 5;
    string shape = "";

    for (int i = number; i <= HEIGHT; i++)
    {
        string character = myRepeat("=", HEIGHT - i);
        string left = createListNumberReverse(i, 2);
        string right = createListNumber(2, i);
        string record = character + left + "1" + right + character;
        shape += record + "\n";
    }
    cout << shape << "\n";
}