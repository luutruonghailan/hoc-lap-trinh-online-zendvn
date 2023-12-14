#include <iostream>
using namespace std;
#include <string>

int main()
{
    char character = 'a';
    string result = "Không là nguyên âm";
    switch (character) {
    case 'u':
    case 'e':
    case 'o':
    case 'a':
    case 'i':
    case 'U':
    case 'E':
    case 'O':
    case 'A':
    case 'I':
        result = "Nguyên âm";
    break;
    }
cout << result;

}