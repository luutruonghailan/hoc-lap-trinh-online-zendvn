#include <iostream>
using namespace std;

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
    /*
    1
    12
    123
    1234
    12345
    */

    int number = 1;
    const int HEIGHT = 5;
    string shape = "";
    for (int i = number; i <= HEIGHT; i++)
    {
        shape += createListNumber(1, i) + "\n";
    }
    cout << shape << "\n";
}