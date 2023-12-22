#include <iostream>
#include "zvn.h"

using namespace std;


int main()
{
    //  7
    //  * * * * * * *
    //  * *       * *
    //  *   *   *   *
    //  *     *     *
    //  *   *   *   *
    //  * *       * *
    //  * * * * * * *

    //  6
    //  * * * * * *
    //  * *     * *
    //  *   * *   *
    //  *   * *   *
    //  * *     * *
    //  * * * * * *

    int height = 7;
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
            for (int j = 1; j <= height; j++)
            {
                if (j == 1 || j == i || j == height - i + 1 || j == height)
                {
                    record += character;
                }
                else
                {
                    record += space;
                }
            }
        }

        shape += record + "\n";
    }

    cout << shape << endl;
}
