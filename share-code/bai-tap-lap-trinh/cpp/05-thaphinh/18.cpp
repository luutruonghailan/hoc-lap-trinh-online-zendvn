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
    // * * * * * *
    //         *
    //       *
    //     *
    //   *
    // * * * * * *

    int height = 6;
    string shape = "";

    for (int i = 1; i <= height; i++)
    {
        string record = "";

        if (i == 1 || i == height)
        {
            record = myRepeat("* ", height);
        }
        else
        {
            record = myRepeat("  ", height - i) + "* ";
        }

        shape += record + "\n";
    }

    cout << shape << endl;
}