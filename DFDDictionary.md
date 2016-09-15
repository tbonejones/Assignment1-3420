# DFD Dictionary

### Developer: 
&emsp;&emsp; The employee who procures/compiles [Software Package](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package) and, after it is checked for OSS Licenses, then modifies it for use <br/>&emsp;&emsp;within the company.

### Manage Software Package for License Scanning (MSPLC): 
&emsp;&emsp; The process that accepts the [Software Package](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package) from the Developer and forwards it to the [Scan for Licences](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#scan-for-licenses)process. This <br/>&emsp;&emsp; process also receives the [SPLR](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr) and sends those results to the OSSFS Database for storage.

### Manager: 
&emsp;&emsp; An upper-level executive at the company who may wish to browse the [SPLR](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr).

### OSS Found in Software (OSSFS): 
&emsp;&emsp;The Database that stores the [SPLR](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr).

### Query for Full List of Packages and Corresponding License Information (QFLPCLI): 
&emsp;&emsp;The process that accepts a [SPLQ](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-query-splq) , sends it to the [OSSFS](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#oss-found-in-software-ossfs) Database, receives the [SPLR](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr), and forwards the [SPLR](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr) to the<br/>&emsp;&emsp; [Manager](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr)'s computer so it can be conveniently browsed.

### Scan for Licenses: 
&emsp;&emsp;The process that accepts a [Software Package](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package) and scans it for open source software licensing language and then sends the <br/>&emsp;&emsp;results of the scan to the [MSPLC](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#manage-software-package-for-license-scanning-msplc).

### Software Package: 
&emsp;&emsp;The cumulative lines of code from all of the software files in the package procurred by the [Developer](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#developer).

### Software Package License Query (SPLQ): 
&emsp;&emsp;A request to recieve the [SPLR](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr).

### Software Package License Results (SPLR): 
&emsp;&emsp;The results from the [Scan for Licenses](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#scan-for-licenses) process. The [SPLR](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package-license-results-splr) is the [Software Package](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package) itself as well as data stating which parts of <br/>&emsp;&emsp;the [Software Package](https://github.com/tbonejones/Assignment1-3420/blob/master/DFDDictionary.md#software-package) were found to have an OSS License.

