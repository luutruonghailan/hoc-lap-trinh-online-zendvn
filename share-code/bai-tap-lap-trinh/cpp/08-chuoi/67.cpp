#include <iostream>
#include <cctype>
using namespace std;

int main()
{
    string str1 = "hai lan";
    for (char &c : str1)
    {
        if (isupper(c))
        {
            c = tolower(c);
        }
        else if (islower(c))
        {
            c = toupper(c);
        }
    }
    cout << str1 << endl; 
    return 0;
}