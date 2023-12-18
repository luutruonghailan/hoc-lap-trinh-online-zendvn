#include<iostream>
#include<string>
using namespace std;
int main()
{
    int start       = 1;
    int end         = 30;
    string result;
    string notice   = "Không có";
    //  tìm giá trị chia hết cho 13 trong khoảng 1 đến 30
    //  13 26 
    // 2,3,4...29
    for (int i = start + 1; i < end; i++)
    {
        if (i % 13 == 0)
        {
            result += to_string(i) + "\n";
        }  
    }

    if (result.length() != 0)
    {
        notice = result;
    }

    cout << notice;
}