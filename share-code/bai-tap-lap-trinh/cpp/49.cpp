#include <iostream>
using namespace std;
#include <string>

int main()
{
    int year = 2000;
    string notice = "Không là năm nhuận ";
    if (year % 4 == 0 && year % 100 != 0 || year % 400 == 0) {
        notice = "Năm nhuận";
    }
    cout << notice;
}