#include <iostream>
#include <string>
using namespace std;

int main()
{
    string input = "2c+)1o!@(*&!y@&chi&^c!@#o3co$23%%^nd$#$!uo5ng";
    string str;
    string key;
    string result = "";
    int startIndex = 0;

    for (char c : input)
    {
        if (isdigit(c))
        {
            key += c;
        }
        else if (isalpha(c))
        {
            str += c;
        }
    }

    for (int i = 0; i < key.length(); i++)
    {
        int size = key[i] - '0';
        string word = str.substr(startIndex, size) + " ";
        word[0] = toupper(word[0]);
        result += word;
        startIndex += size;
    }

    cout << result << endl;
    return 0;
}