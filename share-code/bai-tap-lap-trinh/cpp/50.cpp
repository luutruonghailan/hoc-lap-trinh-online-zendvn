#include <iostream>
using namespace std;
int main()
{
    // Số nguyên dương > 0 || nguyên âm < 0
    // chẵn % 2 == 0 || lẻ % 2 != 0
    int yourNumber      = 4;
    string strName      = " dương";
    string strEven      = " chẵn";

    if (yourNumber < 0)
    {
        strName = " âm";
    }
    
    if (yourNumber % 2 != 0 )
    {
        strEven = " lẻ";
    }
    
    cout << "Số nguyên" << strName << strEven;
    
}