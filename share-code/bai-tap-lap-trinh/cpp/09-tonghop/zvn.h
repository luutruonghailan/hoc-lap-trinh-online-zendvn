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

bool isNumber(string inputStr)
{
    try
    {
        stoi(inputStr);
        return true;
    }
    catch (const std::exception &e)
    {
        return false;
    }
}

bool checkExistInVector(vector<string> vector, string key)
{
    bool isExist = false;

    for (int i = 0; i < vector.size(); i++)
    {
        if (!key.compare(vector[i]))
        {
            isExist = true;
            break;
        }
    }

    return isExist;
}

bool checkExistInVector(vector<int> vector, int key)
{
    bool isExist = false;

    for (int i = 0; i < vector.size(); i++)
    {
        if (key == vector[i])
        {
            isExist = true;
            break;
        }
    }

    return isExist;
}