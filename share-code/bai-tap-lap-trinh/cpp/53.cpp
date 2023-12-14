#include <iostream>
using namespace std;
#include <string>

int main()
{
     int yourNumber = 42208;
		bool isEven = true;
		string result = "Yes";
		
		while (yourNumber > 0) {
			int lastNumber = yourNumber % 10; // 8 1 2
			yourNumber = yourNumber / 10; // 21 2 0           
			if (lastNumber % 2 != 0) {
				isEven = false;
				break;
			}
			
		}
		if (isEven == false) {
			result = "No";
		}
    cout << result << endl;

}	
    
   