#include <iostream>
#include <cctype>
using namespace std;

int main()
{
    string input = "ab@#AB69C!}+21";
    string numberString;
    string letterString;
    string specialCharString;

    for (char c : input)
    {
        if (isdigit(c))
        {
            numberString += c;
        }
        else if (isalpha(c))
        {
            letterString += c;
        }
        else if (ispunct(c))
        {
            specialCharString += c;
        }
    }
    cout << "Chuỗi số: " << numberString << endl;
    cout << "Chuỗi chữ: " << letterString << endl;
    cout << "Chuỗi đặc biệt: " << specialCharString << endl;

    return 0;
}