#include <iostream>
using namespace std;

int main()
{
    string str = "   luu   truong hai lan  ";
    int length = str.length();
    int count = 0;
    bool space = true;

    for (int i = 0; i < length; i++)
    {
        if (str[i] == ' ')
        {
            space = true;
            continue;
        }

        if (space == true)
        {
            count++;
            space = false;
        }
    }

    cout << count;

    return 0;
}