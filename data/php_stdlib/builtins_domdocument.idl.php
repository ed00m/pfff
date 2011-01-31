<?php
// THIS IS AUTOGENERATED BY builtins_php.ml
function dom_document_create_element() { }
function dom_document_create_document_fragment() { }
function dom_document_create_text_node() { }
function dom_document_create_comment() { }
function dom_document_create_cdatasection() { }
function dom_document_create_processing_instruction() { }
function dom_document_create_attribute() { }
function dom_document_create_entity_reference() { }
function dom_document_get_elements_by_tag_name() { }
function dom_document_import_node() { }
function dom_document_create_element_ns() { }
function dom_document_create_attribute_ns() { }
function dom_document_get_elements_by_tag_name_ns() { }
function dom_document_get_element_by_id() { }
function dom_document_normalize_document() { }
function dom_document_save() { }
function dom_document_savexml() { }
function dom_document_validate() { }
function dom_document_xinclude() { }
function dom_document_save_html() { }
function dom_document_save_html_file() { }
function dom_document_schema_validate_file() { }
function dom_document_schema_validate_xml() { }
function dom_document_relaxng_validate_file() { }
function dom_document_relaxng_validate_xml() { }
function dom_node_insert_before() { }
function dom_node_replace_child() { }
function dom_node_remove_child() { }
function dom_node_append_child() { }
function dom_node_has_child_nodes() { }
function dom_node_clone_node() { }
function dom_node_normalize() { }
function dom_node_is_supported() { }
function dom_node_has_attributes() { }
function dom_node_is_same_node() { }
function dom_node_lookup_prefix() { }
function dom_node_is_default_namespace() { }
function dom_node_lookup_namespace_uri() { }
function dom_nodelist_item() { }
function dom_namednodemap_get_named_item() { }
function dom_namednodemap_item() { }
function dom_namednodemap_get_named_item_ns() { }
function dom_characterdata_substring_data() { }
function dom_characterdata_append_data() { }
function dom_characterdata_insert_data() { }
function dom_characterdata_delete_data() { }
function dom_characterdata_replace_data() { }
function dom_attr_is_id() { }
function dom_element_get_attribute() { }
function dom_element_set_attribute() { }
function dom_element_remove_attribute() { }
function dom_element_get_attribute_node() { }
function dom_element_set_attribute_node() { }
function dom_element_remove_attribute_node() { }
function dom_element_get_elements_by_tag_name() { }
function dom_element_get_attribute_ns() { }
function dom_element_set_attribute_ns() { }
function dom_element_remove_attribute_ns() { }
function dom_element_get_attribute_node_ns() { }
function dom_element_set_attribute_node_ns() { }
function dom_element_get_elements_by_tag_name_ns() { }
function dom_element_has_attribute() { }
function dom_element_has_attribute_ns() { }
function dom_element_set_id_attribute() { }
function dom_element_set_id_attribute_ns() { }
function dom_element_set_id_attribute_node() { }
function dom_text_split_text() { }
function dom_text_is_whitespace_in_element_content() { }
function dom_xpath_register_ns() { }
function dom_xpath_query() { }
function dom_xpath_evaluate() { }
function dom_xpath_register_php_functions() { }
class DOMNode {
function __construct() { }
function appendChild() { }
function cloneNode() { }
function getLineNo() { }
function hasAttributes() { }
function hasChildNodes() { }
function insertBefore() { }
function isDefaultNamespace() { }
function isSameNode() { }
function isSupported() { }
function lookupNamespaceUri() { }
function lookupPrefix() { }
function normalize() { }
function removeChild() { }
function replaceChild() { }
function c14n() { }
function c14nfile() { }
function getNodePath() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMAttr {
function __construct() { }
function isId() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMCharacterData {
function __construct() { }
function appendData() { }
function deleteData() { }
function insertData() { }
function replaceData() { }
function substringData() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMComment {
function __construct() { }
function __destruct() { }
}
class DOMText {
function __construct() { }
function isWhitespaceInElementContent() { }
function splitText() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMCDATASection {
function __construct() { }
function __destruct() { }
}
class DOMDocument {
function __construct() { }
function createAttribute() { }
function createAttributens() { }
function createCDATASection() { }
function createComment() { }
function createDocumentFragment() { }
function createElement() { }
function createElementNS() { }
function createEntityReference() { }
function createProcessingInstruction() { }
function createTextNode() { }
function getElementById() { }
function getElementsByTagName() { }
function getElementsByTagNameNS() { }
function importNode() { }
function load() { }
function loadHTML() { }
function loadHTMLFile() { }
function loadXML() { }
function normalizeDocument() { }
function registerNodeClass() { }
function relaxNGValidate() { }
function relaxNGValidateSource() { }
function save() { }
function saveHTML() { }
function saveHTMLFile() { }
function saveXML() { }
function schemaValidate() { }
function schemaValidateSource() { }
function validate() { }
function xinclude() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMDocumentFragment {
function __construct() { }
function appendXML() { }
function __destruct() { }
}
class DOMDocumentType {
function __construct() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMElement {
function __construct() { }
function getAttribute() { }
function getAttributeNode() { }
function getAttributeNodeNS() { }
function getAttributeNS() { }
function getElementsByTagName() { }
function getElementsByTagNameNS() { }
function hasAttribute() { }
function hasAttributeNS() { }
function removeAttribute() { }
function removeAttributeNode() { }
function removeAttributeNS() { }
function setAttribute() { }
function setAttributeNode() { }
function setAttributeNodeNS() { }
function setAttributeNS() { }
function setIDAttribute() { }
function setIDAttributeNode() { }
function setIDAttributeNS() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMEntity {
function __construct() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMEntityReference {
function __construct() { }
function __destruct() { }
}
class DOMNotation {
function __construct() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMProcessingInstruction {
function __construct() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
class DOMNodeIterator {
function __construct() { }
function current() { }
function key() { }
function next() { }
function rewind() { }
function valid() { }
function __destruct() { }
}
class DOMNamedNodeMap {
function __construct() { }
function getNamedItem() { }
function getNamedItemNS() { }
function item() { }
function __get() { }
function __set() { }
function __isset() { }
function getIterator() { }
function __destruct() { }
}
class DOMNodeList {
function __construct() { }
function item() { }
function __get() { }
function __set() { }
function __isset() { }
function getIterator() { }
function __destruct() { }
}
class DOMException {
function __construct() { }
function __destruct() { }
}
class DOMImplementation {
function __construct() { }
function createDocument() { }
function createDocumentType() { }
function hasFeature() { }
function __destruct() { }
}
class DOMXPath {
function __construct() { }
function evaluate() { }
function query() { }
function registerNamespace() { }
function registerPHPFunctions() { }
function __get() { }
function __set() { }
function __isset() { }
function __destruct() { }
}
