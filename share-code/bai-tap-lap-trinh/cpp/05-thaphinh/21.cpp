#include <iostream>
#include "zvn.h"

using namespace std;

int main()
{

    //         1
    //       2 1
    //     3 2 1
    //   4 3 2 1
    // 5 4 3 2 1

    int height = 5;
    string shape = "";

    for (int i = 1; i <= height; i++)
    {
        string space = myRepeat("  ", height - i);
        string number = "";
        string record = "";

        for (int k = i; k >= 1; k--)
        {
            number += to_string(k) + " ";
        }
        record = space + number;
        shape += record + "\n";
    }

    cout << shape << endl;
}