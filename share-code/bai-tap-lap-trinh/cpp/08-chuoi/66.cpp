#include <iostream>
using namespace std;

int main()
{
    string str = "D:/Data/Doing/psd/hailan.doc";
    int length = str.length();
    string breadcrumbs = "";

    for (int i = 0; i < length; i++)
    {
        if (str[i] == '/')
        {
            breadcrumbs += " > ";
            continue;
        }
        else
        {
            breadcrumbs += str[i];
        }
    }

    cout << breadcrumbs << endl;

    return 0;
}