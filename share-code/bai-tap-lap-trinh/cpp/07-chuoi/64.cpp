#include <iostream>
#include <cctype>
using namespace std;

int main()
{
    string str = "hai LAN ";

    for (char &c : str)
    {
        c = tolower(c);
    }

    if (!str.empty())
    {
        str[0] = toupper(str[0]);
    }

    while (!str.empty() && isspace(str.back()))
    {
        str.pop_back();
    }

    if (!str.empty() && str.back() != '.')
    {
        str += '.';
    }
    cout << str;
    return 0;
}