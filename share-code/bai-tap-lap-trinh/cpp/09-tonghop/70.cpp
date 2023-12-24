// Hàm để đọc số nguyên dương
#include <iostream>
using namespace std;
int main()
{
    int yourNumber = 9;
    int yourNumberCopy = yourNumber;
    string arrNumbersSpeak[] = {"không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"};
    string arrDigitSpeak[] = {"trăm", "mươi", ""};
    string arrDigitSpecialSpeak[] = {"linh", "mười"};
    int arrDigits[] = {-1, -1, -1};
    string result = "";
    int count = 2;
    bool hasLastZero = yourNumberCopy % 10 == 0;

    while (yourNumberCopy > 0)
    {
        int lastNumber = yourNumberCopy % 10;
        yourNumberCopy /= 10;
        arrDigits[count] = lastNumber;
        count--;
    }

    for (int i = 0; i < 3; i++)
    {
        int digit = arrDigits[i];
        if (digit != -1)
        {
            string numberSpeak = arrNumbersSpeak[digit] + " ";
            string digitSpeak = arrDigitSpeak[i];
            if (i == 1 && digit <= 1)
            {
                numberSpeak = "";
                digitSpeak = arrDigitSpecialSpeak[digit];
            }

            if (hasLastZero && i > 0 && digit == 0)
            {
                numberSpeak = "";
                digitSpeak = "";
            }

            result += numberSpeak + digitSpeak + " ";
        }
    }

    cout << result << endl;
    return 0;
}