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

