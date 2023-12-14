#include <iostream>
using namespace std;
#include <string>

int main()
{
    int start = 4;
    int end = 5;
    string result = "";
    for (int i = start + 1; i < end; i+2) 
    {
       {result += i + " ";}
    }
    if(result.length() == 0) {result = "Không có";}
    cout << result << endl;
}