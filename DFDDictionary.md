# DFD Dictionary

### Developer: 
&emsp; &emsp; The employee who procures/compiles Software Package and, after it is checked for OSS Licenses, then modifies it for 
&emsp; &emsp; use within the company.

### Manage Software Package for License Scanning (MSPLC): The process that accepts the Software Package from the Developer and 
forwards it to the Scan for Licences process. This process also receives the SPLR and sends those results to the OSSFS
Database for storage.

### Manager: An upper-level executive at the company who may wish to browse the SPLR.

### OSS Found in Software (OSSFS): The Database that stores the SPLR.

### Query for Full List of Packages and Corresponding License Information (QFLPCLI): The process that accepts a SPLQ, sends it to the 
OSSFS Database, receives the SPLR, and forwards the SPLR to the Manager's computer so it can be conveniently browsed.

### Scan for Licenses: The process that accepts a Software Package and scans it for open source software licensing language and then sends the results of the scan to MSPLC.

### Software Package: The cumulative lines of code from all of the software files in the package procurred by the Developer.

### Software Package License Query (SPLQ): A request to recieve the SPLR.

### Software Package License Results (SPLR): The results from the Scan for Licenses process. SPLR is the Software Package itself as
well as data stating which parts of the Software Package were found to have an OSS License.

