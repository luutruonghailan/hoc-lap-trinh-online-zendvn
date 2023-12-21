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

int main()
{

    // 1 2 3 4 5
    //   1 2 3 4
    //     1 2 3
    //       1 2
    //         1

    int height = 5;
    string shape = "";

    for (int i = height; i >= 1; i--)
    {
        string record = "";

        
    }

    cout << shape << endl;
}