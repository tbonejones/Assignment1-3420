# DFD Dictionary 

### Developer: 
The employee who procures/compiles Software Package and, after it is checked for OSS Licenses and Vulnerabilities, then modifies it for use within the company.

### Known Vulnerabilities:
The results of a RSPN search on the NIST Vulnerabilities Data Store. These results are all of the exploitable security flaws/bugs that are known publicly and associated with the Software Package.

### Manage Software Package for License and Vulnerabilities Scanning (MSPLVS): 
The process that accepts the Software Package from the Developer and forwards it to the Scan for Licences process. This process also receives the SPLR and sends those results to the OSSLV Data Store for storage. This process also refines the Software Package name and forwards it to the SRSPN.

### Manager: 
An upper-level executive at the company who may wish to browse the SPLR.

### NIST Vulnerabilities Database:
A searchable database maintained by the National Institute of Standards and Technology (NIST) that iformation about the security flaws/bugs in OSS that could be exploited, possibly maliciously. These flaws/bugs could have been identifed and made publicly known by anyone.

### OSS Licensing and Vulnerabilities Data Store (OSSLV): 
The Data Store that stores the SPLR and the Known Vulnerabilities.

### Query for Software Project License and Vulnerabilities Information (QFSPLVI): 
The process that accepts a SPLVQ, sends it to the OSSLV Database, receives the SPLVR, and forwards the SPLVR to the Manager's computer so it can be conveniently browsed.

### Refined Sofware Package Name (RSPN):
The name of the Software Package is refined by the MSPLVS so that the NIST Vulnerabilites database will return specific enough results (i.e. specifying which version of Adobe so that results for Adobe software not in the Software Package are not returned).

### Scan for Licenses: 
The process that accepts a Software Package and scans it for open source software licensing language and then sends the results of the scan to the MSPLVS.

### Send Refined Software Package Name to NIST Data Store (SRSPN):
The process that interfaces with the NIST Vulnerabilites Database in order to submit the RSPN and recieve the Known Vulnerabilities.

### Software Package: 
The cumulative lines of code from all of the software files in the package procurred by the Developer.

### Software Project License and Vulnerabilities Query (SPLVQ): 
A request to recieve a SPLVR for a specific group of Software Packages comprosing a Software Project.

### Software Project License and Vulnerabilities Results (SPLVR):
A browsable document of the set of the results of all of the Software Packages that comprise a Sofware Project.  These results are the results of the scans for Licensing and Vulnerabilities that were performed on the Software Packages and stored in the OSSLV.

### Software Package License Results (SPLR): 
The results from the Scan for Licenses process. The SPLR is the Software Package itself as well as data stating which parts of the Software Package were found to have an OSS License.

