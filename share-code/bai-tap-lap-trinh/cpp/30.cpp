#include<iostream>
#include<string>
using namespace std;
int main()
{
    int start       = 1;
    int end         = 10;
    string result;
    string notice   = "Không có";
    //  tìm giá trị chẵn trong khoảng 1 đến 10
    // 2 4 6 8 = 2 + 4 + 6 + 8 = 20
    // 2 3 4 5 6 7 8 9 
    // 2 4 6 8 
    for (int i = start + 1; i < end; i+= 2)
    {
        result += to_string(i);
    }

    if (result.length() != 0)
    {
        notice = result;
    }

    cout << notice;
}