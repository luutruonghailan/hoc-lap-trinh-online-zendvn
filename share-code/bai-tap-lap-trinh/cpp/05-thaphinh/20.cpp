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

    // 1 2 3 4 5
    //   1 2 3 4
    //     1 2 3
    //       1 2
    //         1

    int height = 5;
    string shape = "";

    for (int i = height; i >= 1; i--)
    {
        string record = myRepeat("  ", height - i);

        for (int j = 1; j <= i; j++)
        {
            record += to_string(j) + " ";
        }

        shape += record + "\n";
    }

    cout << shape << endl;
}