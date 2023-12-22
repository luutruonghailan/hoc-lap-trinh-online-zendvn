#include <iostream>
#include "zvn.h"

using namespace std;

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
    string character = "* ";
    string space = "  ";

    for (int i = 1; i <= height; i++)
    {
        string record = "";

        if (i == 1 || i == height)
        {
            record = myRepeat(character, height);
        }
        else
        {
            record = myRepeat(space, height - i) + character;
        }

        shape += record + "\n";
    }

    cout << shape << endl;
}