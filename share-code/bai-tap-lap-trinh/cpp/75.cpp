#include <iostream>
#include <string>
#include <cctype>
using namespace std;

int main()
{
    // Còn sai output
    string str = "luutruonghailan";
    string key = "3633";

    
    string result = "";
    int startIndex = 0;
    int endIndex = 0;

    for (int i = 0; i < key.length(); i++)
    {
        string word = "";
        int current = key[i] - '0';
        endIndex = startIndex + current;
        
        word = str.substr(startIndex, endIndex) + " ";

        
        string upCase = word.substr(0, 1);
        for (char &c : upCase)
        {
            c = std::toupper(c);
        }
        word = upCase + word.substr(1);
        

        result += word;
        startIndex = endIndex;
    }

    // cout << "Output: " << result << endl;

    return 0;
}