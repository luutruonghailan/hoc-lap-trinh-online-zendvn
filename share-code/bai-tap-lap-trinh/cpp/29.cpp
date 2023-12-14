#include<iostream>
using namespace std;
int main()
{
    // nhập số thứ 1
    int numberOne;
    cout << "Nhập số thứ 1: ";
    cin >> numberOne;

    // nhập số thứ 2
    int numberTwo;
    cout << "Nhập số thứ 2: ";
    cin >> numberTwo;

     // nhập phép tính
    string math;
    cout << "Nhập vào phép tính của bạn: ";
    cin >> math;

    int result      = 0;
    
    if (math == "+")
    {
        result = numberOne + numberTwo;
    }else if (math == "-")
    {
        result = numberOne - numberTwo;
    }else if (math == "x" || math == "*")
    {
        result = numberOne * numberTwo;
    }else if (math == "/" || math == ":" )
    {
        result = numberOne / numberTwo;
    }
    
    if (result != 0)
    {
        cout << numberOne << " " << math << " " << numberTwo << " = " << result;
    }
    else
    {
        cout << "Không thực hiện được, chỉ chấp nhận các phép tính + - x :";
    }
    
    
    
}