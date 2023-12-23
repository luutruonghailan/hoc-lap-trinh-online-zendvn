#include <iostream>
using namespace std;

int main()
{
    string str1 = "abcc";
    string str2 = "ab2cc";

    bool isCheck = false;
    for (char c : str1)
    {
        if (isdigit(c))
        {
            isCheck = true; 
        }
    }
    cout << boolalpha << isCheck; 
    return 0;
}