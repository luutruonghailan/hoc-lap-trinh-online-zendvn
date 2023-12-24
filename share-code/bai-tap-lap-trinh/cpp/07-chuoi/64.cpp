#include <iostream>
#include <cctype>
using namespace std;

int main()
{
    string str = "    hai LAN ";

    while (isspace(str.back()))
    {
        str.pop_back();
    }

    while (isspace(str.front()))
    {
        str.erase(str.begin());
    }

    for (int i = 0; i < str.length(); i++)
    {
        if (i == 0)
        {
            str[i] = toupper(str[i]);
        }
        else
        {
            str[i] = tolower(str[i]);
        }
    }

    if (!str.empty() && str.back() != '.')
    {
        str += '.';
    }

    cout << str;
    return 0;
}