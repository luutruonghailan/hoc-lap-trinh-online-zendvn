#include<iostream>
using namespace std;
int main()
{
    // a e i o u
    char charater       = 'b';
    string notice       = "Không là nguyên âm";

    switch (charater)
    {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
            notice = "Nguyên âm";
            break;
    }
    cout << notice;
}