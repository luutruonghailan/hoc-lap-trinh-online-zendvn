#include <iostream>
#include <string>
using namespace std;
int main()
{
    int start = 1;
    int end = 10;
    string result;
    string notice = "Không có";
    for (int i = start + 1; i < end; i ++)
    {
        if (i % 2 == 0)
        {
            result += to_string(i);
        }     
    }

    if (result.length() != 0)
    {
        notice = result;
    }

    cout << notice;
}